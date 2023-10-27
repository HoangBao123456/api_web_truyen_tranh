using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;

namespace BusinessLogicLayer
{
    public class admin_mainBusiness : Iadmin_mainBusiness
    {
        private Iadmin_mainRepository _res;
        public admin_mainBusiness(Iadmin_mainRepository res)
        {
            _res = res;
        }
        public List<admin_mainModel> GetData()
        {
            return _res.GetData();
        }
        public List<admin_mainModel> GetDataChapter()
        {
            return _res.GetDataChapter();
        }
    }
}