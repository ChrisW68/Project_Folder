using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SalesApp.Models
{
    class BaseModel
    {
        [Key]
        [Required]
        public int ID { get; set; }

        /* Required with a maximum amount of characters to be 30 */
        [Required]
        [StringLength(30)]
        public string CreatedBy { get; set; }

        [Required]
        public DateTime CreatedDate { get; set; }

        [Required]
        [StringLength(30)]
        public string UpdatedBy { get; set; }

        [Required]
        public DateTime UpdatedDate { get; set; }
    }
}
