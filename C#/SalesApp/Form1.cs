using SalesApp.Data;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace SalesApp
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            GetLists();

        }
        private void GetLists()
        {
            using (var context = new SalesContext())
            {
                /* Step 1: filter them by active
                 * Step 2: Order them by sales person first name
                 * Step 3: Then order them by sales person last name
                 * Step 4L Convert the first name and last name to a list 
                 * and bind to binding source*/
                salesPersonBindingSource.DataSource = context.People
                    .Where(e => e.Active)
                    .OrderBy(e => e.FirstName)
                    .ThenBy(e => e.LastName)
                    .ToList();

                /* Step 1: filter them by active
                 * Step 2: Order them by name
                 * Step 3: Convert the sales person full name to a list 
                 * and bind to binding source*/
                salesRegionBindingSource.DataSource = context.Regions
                    .Where(e => e.Active)
                    .OrderBy(e => e.Name)
                    .ToList();
            }

        }

        private void refreshSalesButton_Click(object sender, EventArgs e)
        {
            var personId = (int)peopleComboBox.SelectedValue;
            var regionId = (int)peopleComboBox.SelectedValue;


            /* Step 1: Select the sales by the currently selected person 
             * Step 2: Then by current selected date
             * Step 3: Order them by Date
             * Step 4: Convert the person and region to a list by date
             * and bind to binding source
             * */
            using (var context = new SalesContext())
            {
                saleBindingSource.DataSource = context.Sales
                    .Where(s => s.PersonId == personId &&
                                s.RegionId == regionId)
                    .OrderBy(s => s.Date)
                    .ToList();
            }
        }
    }
}
