using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;

namespace BusinessLogicLayer
{
    public class accountBusiness : IaccountBusiness
    {
        private IaccountRepository _res;
        public accountBusiness(IaccountRepository res)
        {
            _res = res;
        }
        public List<accountModel> GetData()
        {
            return _res.GetData();
        }
        public accountModel GetSum()
        {
            return _res.GetSum();
        }
        public accountModel GetSumNo()
        {
            return _res.GetSumNo();
        }
        public accountModel GetSumAdmin()
        {
            return _res.GetSumAdmin();
        }
        public accountModel GetSumContent()
        {
            return _res.GetSumContent();
        }
        public bool Create(accountModel model)
        {
            return _res.Create(model);
        }
        public accountModel GetDatabyAccountId(string id)
        {
            return _res.GetDatabyAccountId(id);
        }
        public accountModel GetDatabyAccount(string fullname)
        {
            return _res.GetDatabyAccount(fullname);
        }
        public bool Update(accountModel model)
        {
            return _res.Update(model);
        }
        public bool Delete(string id)
        {
            return _res.Delete(id);
        }
    }
}