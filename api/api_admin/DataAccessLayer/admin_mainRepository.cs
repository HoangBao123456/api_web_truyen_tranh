using DataModel;
namespace DataAccessLayer
{
    public class admin_mainRepository : Iadmin_mainRepository
    {
        private IDatabaseHelper _dbHelper;
        public admin_mainRepository(IDatabaseHelper dbHelper)
        {
            _dbHelper = dbHelper;
        }

        public List<admin_mainModel> GetData()
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "admin_main");
                if (!string.IsNullOrEmpty(msgError))
                    throw new Exception(msgError);
                return dt.ConvertTo<admin_mainModel>().ToList();
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
    }
}