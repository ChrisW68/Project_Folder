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
                salesPersonBindingSource.DataSource = context.Regions
                    .Where(e => e.Active)
                    .OrderBy(e => e.Name)
                    .ToList();
            }

        }
    }
}
