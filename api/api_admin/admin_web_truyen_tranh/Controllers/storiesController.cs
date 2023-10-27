using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;

namespace web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class storiesController : ControllerBase
    {
        private IstoriesBusiness _truyenBusiness;
        public storiesController(IstoriesBusiness truyenBusiness)
        {
            _truyenBusiness = truyenBusiness;
        }
        [Route("get_list_stories")]
        [HttpGet]
        public List<storiesModel> GetData()
        {
            return _truyenBusiness.GetData();
        }
        [Route("get_list_stories_stars")]
        [HttpGet]
        public List<storiesModel> GetData_star()
        {
            return _truyenBusiness.GetData_star();
        }
        [Route("get_by-id/{id}")]
        [HttpGet]
        public storiesModel GetDatabyid(string id)
        {
            return _truyenBusiness.GetDatabyid(id);
        }
        [Route("get_by-name/{name}")]
        [HttpGet]
        public storiesModel GetDataby(string name)
        {
            return _truyenBusiness.GetDataby(name);
        }
        [Route("create-soties")]
        [HttpPost]
        public storiesModel CreateItem([FromBody] storiesModel model)
        {
            _truyenBusiness.Create(model);
            return model;
        }
        [Route("update-stories")]
        [HttpPost]
        public storiesModel UpdateItem([FromBody] storiesModel model)
        {
            _truyenBusiness.Update(model);
            return model;
        }
        [Route("delete-stories")]
        [HttpDelete]
        public IActionResult DeleteItem(string id)
        {
            _truyenBusiness.Delete(id);
            return Ok(new { messange = "xóa thành công" });
        }
    }
}
