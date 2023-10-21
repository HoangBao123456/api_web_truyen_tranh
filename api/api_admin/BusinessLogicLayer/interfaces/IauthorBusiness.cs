using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface IauthorBusiness
    {
        List<authorModel> GetData();
        authorModel GetDatabyAuthor(string author_name);

        bool Create(authorModel model);
        bool Update(authorModel model);
        bool Delete(string id);
    }
}
