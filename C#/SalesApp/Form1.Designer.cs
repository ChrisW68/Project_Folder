namespace SalesApp
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle1 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            this.peopleComboBox = new System.Windows.Forms.ComboBox();
            this.salesPersonBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.regioncomboBox = new System.Windows.Forms.ComboBox();
            this.salesRegionBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.refreshSalesButton = new System.Windows.Forms.Button();
            this.salesdataGridView1 = new System.Windows.Forms.DataGridView();
            this.saleBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.amountDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.dateDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.updatedByDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            ((System.ComponentModel.ISupportInitialize)(this.salesPersonBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.salesRegionBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.salesdataGridView1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.saleBindingSource)).BeginInit();
            this.SuspendLayout();
            // 
            // peopleComboBox
            // 
            this.peopleComboBox.DataSource = this.salesPersonBindingSource;
            this.peopleComboBox.DisplayMember = "FullName";
            this.peopleComboBox.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.peopleComboBox.FormattingEnabled = true;
            this.peopleComboBox.Location = new System.Drawing.Point(12, 12);
            this.peopleComboBox.Name = "peopleComboBox";
            this.peopleComboBox.Size = new System.Drawing.Size(238, 24);
            this.peopleComboBox.TabIndex = 0;
            this.peopleComboBox.ValueMember = "ID";
            // 
            // salesPersonBindingSource
            // 
            this.salesPersonBindingSource.DataSource = typeof(SalesApp.Models.SalesPerson);
            // 
            // regioncomboBox
            // 
            this.regioncomboBox.DataSource = this.salesRegionBindingSource;
            this.regioncomboBox.DisplayMember = "Name";
            this.regioncomboBox.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.regioncomboBox.FormattingEnabled = true;
            this.regioncomboBox.Location = new System.Drawing.Point(280, 12);
            this.regioncomboBox.Name = "regioncomboBox";
            this.regioncomboBox.Size = new System.Drawing.Size(216, 24);
            this.regioncomboBox.TabIndex = 1;
            this.regioncomboBox.ValueMember = "ID";
            // 
            // salesRegionBindingSource
            // 
            this.salesRegionBindingSource.DataSource = typeof(SalesApp.Models.SalesRegion);
            // 
            // refreshSalesButton
            // 
            this.refreshSalesButton.Location = new System.Drawing.Point(531, 12);
            this.refreshSalesButton.Name = "refreshSalesButton";
            this.refreshSalesButton.Size = new System.Drawing.Size(75, 24);
            this.refreshSalesButton.TabIndex = 2;
            this.refreshSalesButton.Text = "Refresh";
            this.refreshSalesButton.UseVisualStyleBackColor = true;
            // 
            // salesdataGridView1
            // 
            this.salesdataGridView1.AllowUserToAddRows = false;
            this.salesdataGridView1.AllowUserToDeleteRows = false;
            this.salesdataGridView1.AutoGenerateColumns = false;
            this.salesdataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.salesdataGridView1.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.amountDataGridViewTextBoxColumn,
            this.dateDataGridViewTextBoxColumn,
            this.updatedByDataGridViewTextBoxColumn});
            this.salesdataGridView1.DataSource = this.saleBindingSource;
            this.salesdataGridView1.Location = new System.Drawing.Point(12, 57);
            this.salesdataGridView1.Name = "salesdataGridView1";
            this.salesdataGridView1.ReadOnly = true;
            this.salesdataGridView1.RowTemplate.Height = 24;
            this.salesdataGridView1.Size = new System.Drawing.Size(484, 342);
            this.salesdataGridView1.TabIndex = 3;
            // 
            // saleBindingSource
            // 
            this.saleBindingSource.DataSource = typeof(SalesApp.Models.Sale);
            // 
            // amountDataGridViewTextBoxColumn
            // 
            this.amountDataGridViewTextBoxColumn.DataPropertyName = "Amount";
            dataGridViewCellStyle1.Format = "C2";
            dataGridViewCellStyle1.NullValue = null;
            this.amountDataGridViewTextBoxColumn.DefaultCellStyle = dataGridViewCellStyle1;
            this.amountDataGridViewTextBoxColumn.HeaderText = "Amount";
            this.amountDataGridViewTextBoxColumn.Name = "amountDataGridViewTextBoxColumn";
            this.amountDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // dateDataGridViewTextBoxColumn
            // 
            this.dateDataGridViewTextBoxColumn.DataPropertyName = "Date";
            dataGridViewCellStyle2.Format = "d";
            dataGridViewCellStyle2.NullValue = null;
            this.dateDataGridViewTextBoxColumn.DefaultCellStyle = dataGridViewCellStyle2;
            this.dateDataGridViewTextBoxColumn.HeaderText = "Date";
            this.dateDataGridViewTextBoxColumn.Name = "dateDataGridViewTextBoxColumn";
            this.dateDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // updatedByDataGridViewTextBoxColumn
            // 
            this.updatedByDataGridViewTextBoxColumn.DataPropertyName = "UpdatedBy";
            this.updatedByDataGridViewTextBoxColumn.HeaderText = "Updated By";
            this.updatedByDataGridViewTextBoxColumn.Name = "updatedByDataGridViewTextBoxColumn";
            this.updatedByDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(627, 412);
            this.Controls.Add(this.salesdataGridView1);
            this.Controls.Add(this.refreshSalesButton);
            this.Controls.Add(this.regioncomboBox);
            this.Controls.Add(this.peopleComboBox);
            this.Name = "Form1";
            this.Text = " ";
            this.Load += new System.EventHandler(this.Form1_Load);
            ((System.ComponentModel.ISupportInitialize)(this.salesPersonBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.salesRegionBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.salesdataGridView1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.saleBindingSource)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.ComboBox peopleComboBox;
        private System.Windows.Forms.BindingSource salesPersonBindingSource;
        private System.Windows.Forms.ComboBox regioncomboBox;
        private System.Windows.Forms.BindingSource salesRegionBindingSource;
        private System.Windows.Forms.Button refreshSalesButton;
        private System.Windows.Forms.DataGridView salesdataGridView1;
        private System.Windows.Forms.BindingSource saleBindingSource;
        private System.Windows.Forms.DataGridViewTextBoxColumn amountDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn dateDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn updatedByDataGridViewTextBoxColumn;
    }
}

