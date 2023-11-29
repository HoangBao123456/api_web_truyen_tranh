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
    }
}