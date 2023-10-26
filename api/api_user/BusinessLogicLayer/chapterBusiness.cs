using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;

namespace BusinessLogicLayer
{
    public class chapterBusiness : IchapterBusiness
    {
        private IchapterRepository _res;
        public chapterBusiness(IchapterRepository res)
        {
            _res = res;
        }
        public List<chapterModel> GetData()
        {
            return _res.GetData();
        }
        public bool Create(chapterModel model)
        {
            return _res.Create(model);
        }

        public List<chapterModel> GetDatabychapter(string stories_id)
        {
            return _res.GetDatabychapter(stories_id);
        }
    }
}