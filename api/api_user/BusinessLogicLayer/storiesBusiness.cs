using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;

namespace BusinessLogicLayer
{
    public class storiesBusiness : IstoriesBusiness
    {
        private IstoriesRepository _res;
        public storiesBusiness(IstoriesRepository res)
        {
            _res = res;
        }
        public List<storiesModel> GetData()
        {
            return _res.GetData();
        }
        public bool Create(storiesModel model)
        {
            return _res.Create(model);
        }

        public storiesModel GetDatabyName(string name)
        {
            return _res.GetDatabyName(name);
        }
        public storiesModel GetDatabyId(string id)
        {
            return _res.GetDatabyId(id);
        }

        public bool Update(storiesModel model)
        {
            return _res.Update(model);
        }
        public bool Delete(string id)
        {
            return _res.Delete(id);
        }
    }
}