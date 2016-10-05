using SalesApp.Interfaces;
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SalesApp.Models
{
    [Table("SalesPeople")]
    class SalesPerson : BaseModel, IActive

    {
        public bool Active { get; set; }

        [Index("FullName", Order = 2)]
        [Required]
        [StringLength(20)]
        public string FirstName { get; set; }

        [Index("FullName", Order=1)]
        [Required]
        [StringLength(20)]
        public string LastName { get; set; }

        public virtual SalesRegion Region { get; set; }


        [Required]
        public int RegionId { get; set; }

        public virtual ObservableListSource<Sale> Sales { get; set; }

        [Range(0, double.MaxValue)]
        [Column("Target")]
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
