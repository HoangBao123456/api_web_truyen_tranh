using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;

namespace admin_web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class accountController : ControllerBase
    {
        private IaccountBusiness _truyenBusiness;
        public accountController(IaccountBusiness truyenBusiness)
        {
            _truyenBusiness = truyenBusiness;
        }
        [Route("get_account")]
        [HttpGet]
        public List<accountModel> GetData()
        {
            return _truyenBusiness.GetData();
        }
        [Route("get_by-account/{fullname}")]
        [HttpGet]
        public accountModel GetDatabyAccount(string fullname)
        {
            return _truyenBusiness.GetDatabyAccount(fullname);
        }
        [Route("get_sum")]
        [HttpGet]
        public accountModel GetSum()
        {
            return _truyenBusiness.GetSum();
        }
        [Route("get_sum-no")]
        [HttpGet]
        public accountModel GetSumNo()
        {
            return _truyenBusiness.GetSumNo();
        }
        [Route("get_sum-admin")]
        [HttpGet]
        public accountModel GetSumAdmin()
        {
            return _truyenBusiness.GetSumAdmin();
        }
        [Route("get_sum-content")]
        [HttpGet]
        public accountModel GetSumContent()
        {
            return _truyenBusiness.GetSumContent();
        }
        [Route("create-account")]
        [HttpPost]
        public accountModel CreateItem([FromBody] accountModel model)
        {
            _truyenBusiness.Create(model);
            return model;
        }
        [Route("update-account")]
        [HttpPost]
        public accountModel UpdateItem([FromBody] accountModel model)
        {
            _truyenBusiness.Update(model);
            return model;
        }
        [Route("delete-account")]
        [HttpPost]
        public IActionResult DeleteItem(string id)
        {
            _truyenBusiness.Delete(id);
            return Ok(new { messange = "xóa thành công" });
        }
    }
}
