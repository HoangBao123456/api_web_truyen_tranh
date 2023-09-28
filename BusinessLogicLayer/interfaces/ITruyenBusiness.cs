using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface ITruyenBusiness
    {
        TruyenModel GetDatabyID(string id);
        bool Create(TruyenModel model);
        bool Update(TruyenModel model);
        bool Delete(TruyenModel id);
    }
}
