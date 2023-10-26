using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface IstarsRepository
    {
        List<starsModel> GetDatabyStar(string star);
        List<starsModel> GetDatabyCount(string count);

    }
}
