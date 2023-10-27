using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;

namespace BusinessLogicLayer
{
    public class authorBusiness : IauthorBusiness
    {
        private IauthorRepository _res;
        public authorBusiness(IauthorRepository res)
        {
            _res = res;
        }
        public List<authorModel> GetData()
        {
            return _res.GetData();
        }
        public bool Create(authorModel model)
        {
            return _res.Create(model);
        }
        public authorModel GetDatabyAuthorId(string id)
        {
            return _res.GetDatabyAuthorId(id);
        }
        public authorModel GetDatabyAuthor(string author_name)
        {
            return _res.GetDatabyAuthor(author_name);
        }
        public bool Update(authorModel model)
        {
            return _res.Update(model);
        }
        public bool Delete(int id)
        {
            return _res.Delete(id);
        }
    }
}