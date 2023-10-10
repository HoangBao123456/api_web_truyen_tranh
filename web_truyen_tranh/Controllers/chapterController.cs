using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;

namespace web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class chapterController : ControllerBase
    {
        private IchapterBusiness _truyenBusiness;
        public chapterController(IchapterBusiness truyenBusiness)
        {
            _truyenBusiness = truyenBusiness;
        }
        [Route("get_by-chapter/{chapter}")]
        [HttpGet]
        public chapterModel GetDatabychapter(string chapter)
        {
            return _truyenBusiness.GetDatabychapter(chapter);
        }
        [Route("create-chapter")]
        [HttpPost]
        public chapterModel CreateItem([FromBody] chapterModel model)
        {
            _truyenBusiness.Create(model);
            return model;
        }
        [Route("update-chapter")]
        [HttpPost]
        public chapterModel UpdateItem([FromBody] chapterModel model)
        {
            _truyenBusiness.Update(model);
            return model;
        }
        [Route("delete-chapter")]
        [HttpPost]
        public IActionResult DeleteItem(string id)
        {
            _truyenBusiness.Delete(id);
            return Ok(new { messange = "xóa thành công" });
        }
    }
}
