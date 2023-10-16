using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface IcategoriesBusiness
    {
        categoriesModel GetDatabyName(string name);
        List<categoriesModel> GetData();

        bool Create(categoriesModel model);
        bool Update(categoriesModel model);
        bool Delete(string id);
    }
}
