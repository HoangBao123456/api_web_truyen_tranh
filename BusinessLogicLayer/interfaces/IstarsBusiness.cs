using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface IstarsBusiness
    {
        List<starsModel> GetDatabyStar(string stars);
        List<starsModel> GetDatabyCount(string count);

        bool Create(starsModel model);
        bool Update(starsModel model);
        bool Delete(string id);
    }
}
