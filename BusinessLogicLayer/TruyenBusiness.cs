using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;

namespace BusinessLogicLayer
{
    public class TruyenBusiness : ITruyenBusiness
    {
        private ITruyenRepository _res;
        public TruyenBusiness(ITruyenRepository res)
        {
            _res = res;
        }
        public bool Create(TruyenModel model)
        {
            return _res.Create(model);
        }

        public TruyenModel GetDatabyID(string id)
        {
            return _res.GetDatabyID(id);
        }

        public bool Update(TruyenModel model)
        {
            return _res.Update(model);
        }
        public bool Delete(TruyenModel model)
        {
            return _res.Delete(model);
        }
    }
}