using System;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.ComponentModel;
using System.Data.Entity;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SalesApp.Models
{
    /* Convert a collect of objects into a binding list using ToBindingList */
    class ObservableListSource<T> : ObservableCollection<T>, IListSource where T : BaseModel
    {
        private IBindingList _bindingList;

        bool IListSource.ContainsListCollection { get { return false; } }

        public IList GetList()
        {
            throw new NotImplementedException();
        }

        IList IListSource.GetList()
        {
            return _bindingList ?? (_bindingList = this.ToBindingList());
        }

    }
}
