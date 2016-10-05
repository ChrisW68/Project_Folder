using SalesApp.Interfaces;
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SalesApp.Models
{
    class SalesPerson : BaseModel, IActive

    {
        public bool Active { get; set; }

        [Required]
        [StringLength(20)]
        public string FirstName { get; set; }

        [Required]
        [StringLength(20)]
        public string LastName { get; set; }

        public virtual SalesRegion Region { get; set; }


        [Required]
        public int RegionId { get; set; }

        public virtual ObservableListSource<Sale> Sales { get; set; }

        [Range(0, double.MaxValue)]
        public decimal SalesTarget { get; set; }

        /* This will retrieve full name */
        public string FullName
        {
            get
            {
                return string.Format("{0} {1}", FirstName, LastName).Trim();
            }
        }
    }
}
