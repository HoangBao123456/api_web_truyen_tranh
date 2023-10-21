using DataModel;
namespace DataAccessLayer
{
    public class author_storiesRepository : Iauthor_storiesRepository
    {
        private IDatabaseHelper _dbHelper;
        public author_storiesRepository(IDatabaseHelper dbHelper)
        {
            _dbHelper = dbHelper;
        }

        public List<author_storiesModel> GetData()
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "admin_get_list_author_quantity");
                if (!string.IsNullOrEmpty(msgError))
                    throw new Exception(msgError);
                return dt.ConvertTo<author_storiesModel>().ToList();
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
    }
}