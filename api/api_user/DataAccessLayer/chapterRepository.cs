using DataModel;
namespace DataAccessLayer
{
    public class chapterRepository : IchapterRepository
    {
        private IDatabaseHelper _dbHelper;
        public chapterRepository(IDatabaseHelper dbHelper)
        {
            _dbHelper = dbHelper;
        }
        public List<chapterModel> GetDatabychapter(string stories_id)
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "get_list_chapter",
                     "@story_id", stories_id);
                if (!string.IsNullOrEmpty(msgError))
                    throw new Exception(msgError);
                return dt.ConvertTo<chapterModel>().ToList();
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
        public List<chapterModel> GetData()
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "get_list");
                if (!string.IsNullOrEmpty(msgError))
                    throw new Exception(msgError);
                return dt.ConvertTo<chapterModel>().ToList();
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
        public chapterModel GetDatabyId(string id)
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "get_by_id_chapter",
                     "@id", id);
                if (!string.IsNullOrEmpty(msgError))
                    throw new Exception(msgError);
                return dt.ConvertTo<chapterModel>().FirstOrDefault();
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
    }
}