using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;

namespace web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class TruyenController : ControllerBase
    {
        private ITruyenBusiness _truyenBusiness;
        public TruyenController(ITruyenBusiness truyenBusiness)
        {
            _truyenBusiness = truyenBusiness;
        }
        [Route("get_by-id/{id}")]
        [HttpGet]
        public TruyenModel GetDatabyID(string id)
        {
            return _truyenBusiness.GetDatabyID(id);
        }
        [Route("create-truyen")]
        [HttpPost]
        public TruyenModel CreateItem([FromBody] TruyenModel model)
        {
            _truyenBusiness.Create(model);
            return model;
        }
        [Route("update-truyen")]
        [HttpPost]
        public TruyenModel UpdateItem([FromBody] TruyenModel model)
        {
            _truyenBusiness.Update(model);
            return model;
        }
        [Route("delete-truyen")]
        [HttpPost]
        public TruyenModel DeleteItem(string id)
        {
            return _truyenBusiness.Delete(id);
        }
    }
}
