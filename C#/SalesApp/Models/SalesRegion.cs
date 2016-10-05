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
    class SalesRegion : BaseModel, IActive
    {
        [Required]
        public bool Active { get; set; }

        [Index(IsUnique =true)]
        [Required]
        [StringLength(20)]
        public string Name { get; set; }


        [Required]
        [StringLength(5)]
        public string Code { get; set; }

        public virtual ObservableListSource<SalesPerson> People { get; set; }

        public virtual ObservableListSource<Sale> Sales { get; set; }

        [Range(0, double.MaxValue)]
        public decimal SalesTarget { get; set; }
    }
}
