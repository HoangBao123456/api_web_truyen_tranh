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
        public bool Create(chapterModel model)
        {
            string msgError = "";
            try
            {
                var result = _dbHelper.ExecuteScalarSProcedureWithTransaction(out msgError, "create_chapter",
                "@name", model.story_id,
                "@chapter", model.chapter,
                "@name_chapter", model.name_chapter,
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
    }
}