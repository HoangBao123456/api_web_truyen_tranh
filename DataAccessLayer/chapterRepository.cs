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
        public chapterModel GetDatabychapter(string chapter)
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "get_by_chapter",
                     "@chapter", chapter);
                if (!string.IsNullOrEmpty(msgError))
                    throw new Exception(msgError);
                return dt.ConvertTo<chapterModel>().FirstOrDefault();
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
        public bool Create(chapterModel model)
        {
            string msgError = "";
            try
            {
                var result = _dbHelper.ExecuteScalarSProcedureWithTransaction(out msgError, "create_chapter",
                "@story_id", model.story_id,
                "@chapter", model.chapter,
                "@name", model.name,
                "@content", model.content
                );
                if ((result != null && !string.IsNullOrEmpty(result.ToString())) || !string.IsNullOrEmpty(msgError))
                {
                    throw new Exception(Convert.ToString(result) + msgError);
                }
                return true;
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
        public bool Update(chapterModel model)
        {
            string msgError = "";
            try
            {
                var result = _dbHelper.ExecuteScalarSProcedureWithTransaction(out msgError, "update_chapter",
                  "@id", model.id,
                "@story_id", model.story_id,
                "@chapter", model.chapter,
                "@name", model.name,
                "@content", model.content
                );
                if ((result != null && !string.IsNullOrEmpty(result.ToString())) || !string.IsNullOrEmpty(msgError))
                {
                    throw new Exception(Convert.ToString(result) + msgError);
                }
                return true;
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
        public bool Delete(string id)
        {
            string msgError = "";
            try
            {
                var result = _dbHelper.ExecuteScalarSProcedureWithTransaction(out msgError, "delete_chapter",
                     "@id", id);
                if ((result != null && !string.IsNullOrEmpty(id.ToString())) || !string.IsNullOrEmpty(msgError))
                {
                    throw new Exception(Convert.ToString(result) + msgError);
                }
                return true;
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
    }
}