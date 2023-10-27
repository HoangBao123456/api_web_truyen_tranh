using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface IstoriesBusiness
    {
        storiesModel GetDatabyid(string id);
        storiesModel GetDataby(string name);
        List<storiesModel> GetData();
        List<storiesModel> GetData_star();

        bool Create(storiesModel model);
        bool Update(storiesModel model);
        bool Delete(string id);
    }
}
