using DataModel;
namespace DataAccessLayer
{
    public class TruyenRepository : ITruyenRepository
    {
        private IDatabaseHelper _dbHelper;
        public TruyenRepository(IDatabaseHelper dbHelper)
        {
            _dbHelper = dbHelper;
        }
        public TruyenModel GetDatabyID(string id)
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "get_by_id",
                     "@id", id);
                if (!string.IsNullOrEmpty(msgError))
                    throw new Exception(msgError);
                return dt.ConvertTo<TruyenModel>().FirstOrDefault();
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
        public bool Create(TruyenModel model)
        {
            string msgError = "";
            try
            {
                var result = _dbHelper.ExecuteScalarSProcedureWithTransaction(out msgError, "create",
                "@id_truyen", model.id_truyen,
                "@ma_truyen", model.ma_truyen,
                "@ten_truyen", model.ten_truyen,
                "@loai_truyen", model.loai_truyen,
                "@tac_gia", model.tac_gia,
                "@mo_ta", model.mo_ta
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
        public bool Update(TruyenModel model)
        {
            string msgError = "";
            try
            {
                var result = _dbHelper.ExecuteScalarSProcedureWithTransaction(out msgError, "truyen_update",
                "@id_truyen", model.id_truyen,
                "@ma_truyen", model.ma_truyen,
                "@ten_truyen", model.ten_truyen,
                "@loai_truyen", model.loai_truyen,
                "@tac_gia", model.tac_gia,
                "@mo_ta", model.mo_ta);
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
        public TruyenModel Delete(string id)
        {
            string msgError = "";
            try
            {
                var result = _dbHelper.ExecuteScalarSProcedureWithTransaction(out msgError, "truyen_delete",
                     "@id", id);
                if ((id != null && !string.IsNullOrEmpty(id.ToString())) || !string.IsNullOrEmpty(msgError))
                {
                    throw new Exception(Convert.ToString(id) + msgError);
                }
                return;
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
    }
}