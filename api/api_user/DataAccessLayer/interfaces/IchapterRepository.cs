using DataModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer
{
    public partial interface IchapterRepository
    {
        List<chapterModel> GetDatabychapter(string stories_id);
        List<chapterModel> GetData();
        chapterModel GetDatabyId(string id);
    }
}
