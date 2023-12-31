﻿using DataModel;
namespace DataAccessLayer
{
    public class storiesRepository : IstoriesRepository
    {
        private IDatabaseHelper _dbHelper;
        public storiesRepository(IDatabaseHelper dbHelper)
        {
            _dbHelper = dbHelper;
        }
        public storiesModel GetDataby(string name)
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "get_by_story_name",
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
        public storiesModel GetDatabyid(string id)
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "get_by_id",
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
        public List<storiesModel> GetData_star()
        {
            string msgError = "";
            try
            {
                var dt = _dbHelper.ExecuteSProcedureReturnDataTable(out msgError, "storie_star");
                if (!string.IsNullOrEmpty(msgError))
                    throw new Exception(msgError);
                return dt.ConvertTo<storiesModel>().ToList();
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }
        public bool Create(storiesModel model)
        {
            string msgError = "";
            try
            {
                var result = _dbHelper.ExecuteScalarSProcedureWithTransaction(out msgError, "create_stories",
                "@images", model.images,
                "@name", model.name,
                "@desc", model.descr
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
        public bool Update(storiesModel model)
        {
            string msgError = "";
            try
            {
                var result = _dbHelper.ExecuteScalarSProcedureWithTransaction(out msgError, "update_stories",
                  "@id", model.id,
                "@images", model.images,
                "@name", model.name,
                "@desc", model.descr
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
                var result = _dbHelper.ExecuteScalarSProcedureWithTransaction(out msgError, "delete_stories",
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