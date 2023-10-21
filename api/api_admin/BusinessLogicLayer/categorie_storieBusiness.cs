using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;

namespace BusinessLogicLayer
{
    public class categorie_storieBusiness : Icategorie_storieBusiness
    {
        private Icategorie_storieRepository _res;
        public categorie_storieBusiness(Icategorie_storieRepository res)
        {
            _res = res;
        }
        public bool Create(categorie_storieModel model)
        {
            return _res.Create(model);
        }

        public categorie_storieModel GetDatabyid(string id)
        {
            return _res.GetDatabyid(id);
        }

        public bool Update(categorie_storieModel model)
        {
            return _res.Update(model);
        }
        public bool Delete(string id)
        {
            return _res.Delete(id);
        }
    }
}