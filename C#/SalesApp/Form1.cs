using SalesApp.Data;
using SalesApp.Models;
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
            GetSales();

        }

        private void GetSales()
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



        /* This will pull out the information of the sales person full name
         * and sales person target when the Target button is pressed*/
        private void salesTargetButton_Click(object sender, EventArgs e)
        {
            var personId = (int)peopleComboBox.SelectedValue;

            using (var context = new SalesContext())
            {
                /* Will pull a single person out of database if person does not exist
                 * it will return a null value */
                var person = context.People.SingleOrDefault(p => p.ID == personId);

                /* If person is null not equal to no a message box will be displayed
                 * states the persons fullname and the sales target */
                if (person != null)
                {
                    MessageBox.Show(string.Format("{0} has a sales target of {1:C}",
                        person.FullName,
                        person.SalesTarget));
                }

            }
        }

        private void NewSaleButton_Click(object sender, EventArgs e)
        {
            var personId = (int)peopleComboBox.SelectedValue;
            var regionId = (int)peopleComboBox.SelectedValue;
            
            /* Step 1: Creates new model
             * Step 2: Populate with data information
             * */
            var sale = new Sale
            {
                Amount = newAmountNumericUpDown.Value,
                Date = newDateTimePicker.Value,
                PersonId = personId,
                RegionId = regionId
            };

            /* Create new context and add model to dbset */
            using (var context = new SalesContext())
            {
                context.Sales.Add(sale);
                var result = context.SaveChanges();

                MessageBox.Show(string.Format("{0} sales created.", result));
                GetSales();
            }

        }

        private void salesdataGridView1_CellEndEdit(object sender, DataGridViewCellEventArgs e)
        {
            if (e.ColumnIndex == 1)
            {
                var salesId = (int)salesdataGridView1.Rows[e.RowIndex].Cells[0].Value;
                var amount = (decimal)salesdataGridView1.Rows[e.RowIndex].Cells[1].Value;

                using (var context = new SalesContext())
                {
                    /* Will pull a single person out of database if person does not exist
                     * it will return a null value */
                    var sale = context.Sales.SingleOrDefault(p => p.ID == salesId);

                    /* If sale is null not equal */
                    if (sale != null)
                    {
                        sale.Amount = amount;
                        var result = context.SaveChanges();

                        MessageBox.Show(string.Format("{0} sales created.", result));
                        GetSales();
                    }
                }
            }
        }

        private void salesdataGridView1_UserDeletingRow(object sender, DataGridViewRowCancelEventArgs e)
        {
            if (MessageBox.Show("Are you sure you want to delte the sale?", "Delete",
                MessageBoxButtons.YesNo) == System.Windows.Forms.DialogResult.No)
            {
                e.Cancel = true;
                return;
            }
            var salesId = (int)e.Row.Cells[0].Value;

            using (var context = new SalesContext())
            {
                /* Will pull a single person out of database if person does not exist
                 * it will return a null value */
                var sale = context.Sales.SingleOrDefault(p => p.ID == salesId);

                /* If sale is null not equal */
                if (sale != null)
                {
                    context.Sales.Remove(sale);
                    var result = context.SaveChanges();

                    MessageBox.Show(string.Format("{0} sales deleted.", result));
                }
            }
        }
    }
}
