using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;

namespace admin_web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class authorController : ControllerBase
    {
        private IauthorBusiness _truyenBusiness;
        public authorController(IauthorBusiness truyenBusiness)
        {
            _truyenBusiness = truyenBusiness;
        }
        [Route("get_author")]
        [HttpGet]
        public List<authorModel> GetData()
        {
            return _truyenBusiness.GetData();
        }
        [Route("get_by-author/{author}")]
        [HttpGet]
        public authorModel GetDatabyAuthor(string author)
        {
            return _truyenBusiness.GetDatabyAuthor(author);
        }
        [Route("create-author")]
        [HttpPost]
        public authorModel CreateItem([FromBody] authorModel model)
        {
            _truyenBusiness.Create(model);
            return model;
        }
        [Route("update-author")]
        [HttpPost]
        public authorModel UpdateItem([FromBody] authorModel model)
        {
            _truyenBusiness.Update(model);
            return model;
        }
        [Route("delete-author")]
        [HttpPost]
        public IActionResult DeleteItem(string id)
        {
            _truyenBusiness.Delete(id);
            return Ok(new { messange = "xóa thành công" });
        }
    }
}
