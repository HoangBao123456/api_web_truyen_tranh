using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;

namespace BusinessLogicLayer
{
    public class categoriesBusiness : IcategoriesBusiness
    {
        private IcategoriesRepository _res;
        public categoriesBusiness(IcategoriesRepository res)
        {
            _res = res;
        }
        public List<categoriesModel> GetData()
        {
            return _res.GetData();
        }
        public bool Create(categoriesModel model)
        {
            return _res.Create(model);
        }

        public categoriesModel GetDatabyName(string name)
        {
            return _res.GetDatabyName(name);
        }

        public bool Update(categoriesModel model)
        {
            return _res.Update(model);
        }
        public bool Delete(string id)
        {
            return _res.Delete(id);
        }
    }
}