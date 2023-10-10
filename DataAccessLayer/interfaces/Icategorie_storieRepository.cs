using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface Icategorie_storieRepository
    {
        categorie_storieModel GetDatabyid(string id);
        bool Create(categorie_storieModel model);
        bool Update(categorie_storieModel model);
        bool Delete(string id);
    }
}
