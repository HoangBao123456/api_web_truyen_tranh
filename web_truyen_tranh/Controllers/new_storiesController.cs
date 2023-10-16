using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;
namespace web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class new_storiesController : ControllerBase
    {
        private Inew_storiesBusiness _truyenBusiness;
        public new_storiesController(Inew_storiesBusiness truyenBusiness)
        {
            _truyenBusiness = truyenBusiness;
        }
        [Route("get_list_new_stories")]
        [HttpGet]
        public List<new_storiesModel> GetData()
        {
            return _truyenBusiness.GetData();
        }
        [Route("creat_new_stoies")]
        [HttpPost]
        public new_storiesModel CreateItem([FromBody] new_storiesModel model)
        {
            _truyenBusiness.Create(model);
            return model;
        }
        [Route("update_new_stories")]
        [HttpPost]
        public new_storiesModel UpdateItem([FromBody] new_storiesModel model)
        {
            _truyenBusiness.Update(model);
            return model;
        }
        [Route("delete_new_stories")]
        [HttpPost]
        public IActionResult DeleteItem(string id)
        {
            _truyenBusiness.Delete(id);
            return Ok(new { messange = "xóa thành công" });
        }
    }
}
