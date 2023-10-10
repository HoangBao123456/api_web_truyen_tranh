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
        public bool Create(chapterModel model)
        {
            return _res.Create(model);
        }

        public chapterModel GetDatabychapter(string chapter)
        {
            return _res.GetDatabychapter(chapter);
        }

        public bool Update(chapterModel model)
        {
            return _res.Update(model);
        }
        public bool Delete(string id)
        {
            return _res.Delete(id);
        }
    }
}