using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SalesApp.Models
{
    class Sale : BaseModel
    {
        [Required]
        /* Range of Sale from 0.01 to 10000 dollars that is required to be filled out */
        [Range(0, double.MaxValue)]
        public decimal Amount { get; set; }

        [Required]
        public DateTime Date { get; set; }

        public virtual SalesPerson Person { get; set; }

        [Required]
        public int PersonId { get; set; }

        public virtual SalesRegion Region { get; set; }

        [Required]
        public int RegionId { get; set; }
    }
}
