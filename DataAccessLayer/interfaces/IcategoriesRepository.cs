using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface IcategoriesRepository
    {
        categoriesModel GetDatabyName(string name);
        bool Create(categoriesModel model);
        bool Update(categoriesModel model);
        bool Delete(string id);
    }
}
