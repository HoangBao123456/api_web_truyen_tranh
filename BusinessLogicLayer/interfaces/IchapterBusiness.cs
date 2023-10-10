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
        chapterModel GetDatabychapter(string chapter);
        bool Create(chapterModel model);
        bool Update(chapterModel model);
        bool Delete(string id);
    }
}
