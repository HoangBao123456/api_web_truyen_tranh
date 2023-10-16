using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface Inew_storiesRepository
    {
        List<new_storiesModel> GetData();
        bool Create(new_storiesModel model);
        bool Update(new_storiesModel model);
        bool Delete(string id);
    }
}
