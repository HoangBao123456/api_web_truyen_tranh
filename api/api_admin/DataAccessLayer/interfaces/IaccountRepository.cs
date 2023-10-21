using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface IaccountRepository
    {
        List<accountModel> GetData();
        accountModel GetDatabyAccount(string fullname);
        accountModel GetSum();
        accountModel GetSumNo();
        accountModel GetSumAdmin();
        accountModel GetSumContent();

        bool Create(accountModel model);
        bool Update(accountModel model);
        bool Delete(string id);
    }
}
