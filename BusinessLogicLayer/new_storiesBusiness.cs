using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;

namespace BusinessLogicLayer
{
    public class new_storiesBusiness : Inew_storiesBusiness
    {
        private Inew_storiesRepository _res;
        public new_storiesBusiness(Inew_storiesRepository res)
        {
            _res = res;
        }
        public List<new_storiesModel> GetData()
        {
            return _res.GetData();
        }
        public bool Create(new_storiesModel model)
        {
            return _res.Create(model);
        }

        public bool Update(new_storiesModel model)
        {
            return _res.Update(model);
        }
        public bool Delete(string id)
        {
            return _res.Delete(id);
        }
    }
}