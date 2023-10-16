using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface IstoriesRepository
    {
        storiesModel GetDatabyName(string name);
        List<storiesModel> GetData();
        storiesModel GetDatabyId(string id);
        bool Create(storiesModel model);
        bool Update(storiesModel model);
        bool Delete(string id);
    }
}
