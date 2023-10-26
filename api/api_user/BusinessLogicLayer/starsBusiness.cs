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
        public List<starsModel> GetDatabyStar(string stars)
        {
            return _res.GetDatabyStar(stars);
        }
        public List<starsModel> GetDatabyCount(string count)
        {
            return _res.GetDatabyCount(count);
        }
    }
}