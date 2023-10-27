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
        public List<storiesModel> GetData_star()
        {
            return _res.GetData_star();
        }
        public bool Create(storiesModel model)
        {
            return _res.Create(model);
        }
        public storiesModel GetDataby(string name)
        {
            return _res.GetDataby(name);
        }

        public storiesModel GetDatabyid(string id)
        {
            return _res.GetDatabyid(id);
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