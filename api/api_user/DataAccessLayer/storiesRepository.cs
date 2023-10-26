using DataModel;
namespace DataAccessLayer
{
    public class storiesRepository : IstoriesRepository
    {
        private IDatabaseHelper _dbHelper;
        public storiesRepository(IDatabaseHelper dbHelper)
        {
            _dbHelper = dbHelper;
        }
        public storiesModel GetDatabyName(string name)
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "get_by_id",
                     "@name", name);
                if (!string.IsNullOrEmpty(msgError))
                    throw new Exception(msgError);
                return dt.ConvertTo<storiesModel>().FirstOrDefault();
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
        public storiesModel GetDatabyId(string id)
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "get_by_stories_id",
                     "@id", id);
                if (!string.IsNullOrEmpty(msgError))
                    throw new Exception(msgError);
                return dt.ConvertTo<storiesModel>().FirstOrDefault();
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
        public List<storiesModel> GetData()
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "get_list_stories");
                if (!string.IsNullOrEmpty(msgError))
                    throw new Exception(msgError);
                return dt.ConvertTo<storiesModel>().ToList();
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
    }
}