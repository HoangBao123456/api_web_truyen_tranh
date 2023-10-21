using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;

namespace BusinessLogicLayer
{
    public class author_storiesBusiness : Iauthor_storiesBusiness
    {
        private Iauthor_storiesRepository _res;
        public author_storiesBusiness(Iauthor_storiesRepository res)
        {
            _res = res;
        }
        public List<author_storiesModel> GetData()
        {
            return _res.GetData();
        }
    }
}