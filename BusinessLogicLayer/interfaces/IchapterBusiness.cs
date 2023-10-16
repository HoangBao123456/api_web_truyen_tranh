using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface IchapterBusiness
    {
        List<chapterModel> GetDatabychapter(string stories_id);
        List<chapterModel> GetData();
        chapterModel GetDatabyId(string id);

        bool Create(chapterModel model);
        bool Update(chapterModel model);
        bool Delete(string id);
    }
}
