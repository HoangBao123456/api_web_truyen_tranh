using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;

namespace admin_web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class admin_mainController : ControllerBase
    {
        private Iadmin_mainBusiness _truyenBusiness;
        public admin_mainController(Iadmin_mainBusiness truyenBusiness)
        {
            _truyenBusiness = truyenBusiness;
        }
        [Route("get_admin_main")]
        [HttpGet]
        public List<admin_mainModel> GetData()
        {
            return _truyenBusiness.GetData();
        }
    }
}
