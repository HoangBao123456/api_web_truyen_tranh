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
        [Route("get_list")]
        [HttpGet]
        public List<chapterModel> GetData()
        {
            return _truyenBusiness.GetData();
        }
        [Route("get_by-id/{id}")]
        [HttpGet]
        public chapterModel GetDatabyId(string id)
        {
            return _truyenBusiness.GetDatabyId(id);
        }
        [Route("get_list_chapter/{stories_id}")]
        [HttpGet]
        public List<chapterModel> GetDatabychapter(string stories_id)
        {
            return _truyenBusiness.GetDatabychapter(stories_id);
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
