using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;

namespace BusinessLogicLayer
{
    public class starsBusiness : IstarsBusiness
    {
        private IstarsRepository _res;
        public starsBusiness(IstarsRepository res)
        {
            _res = res;
        }
        public bool Create(starsModel model)
        {
            return _res.Create(model);
        }
        public List<starsModel> GetDatabyStar(string stars)
        {
            return _res.GetDatabyStar(stars);
        }
        public List<starsModel> GetDatabyCount(string count)
        {
            return _res.GetDatabyCount(count);
        }

        public bool Update(starsModel model)
        {
            return _res.Update(model);
        }
        public bool Delete(string id)
        {
            return _res.Delete(id);
        }
    }
}