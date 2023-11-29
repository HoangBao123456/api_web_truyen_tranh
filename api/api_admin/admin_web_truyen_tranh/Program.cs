using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;
using Microsoft.AspNetCore.Authentication.JwtBearer;    
using Microsoft.IdentityModel.Tokens;
using System.Text;

var builder = WebApplication.CreateBuilder(args);
builder.Services.AddCors(options =>
{
    options.AddPolicy("AllowAll", builder => builder.AllowAnyOrigin().AllowAnyMethod().AllowAnyHeader());
});
// Add services to the container.
// admin
builder.Services.AddTransient<IDatabaseHelper, DatabaseHelper>();
builder.Services.AddTransient<IstoriesRepository, storiesRepository>();
builder.Services.AddTransient<IstoriesBusiness, storiesBusiness>();

builder.Services.AddTransient<Iadmin_mainRepository, admin_mainRepository>();
builder.Services.AddTransient<Iadmin_mainBusiness, admin_mainBusiness>();

builder.Services.AddTransient<Iauthor_storiesRepository, author_storiesRepository>();
builder.Services.AddTransient<Iauthor_storiesBusiness, author_storiesBusiness>();

builder.Services.AddTransient<IauthorRepository, authorRepository>();
builder.Services.AddTransient<IauthorBusiness, authorBusiness>();

builder.Services.AddTransient<IaccountRepository, accountRepository>();
builder.Services.AddTransient<IaccountBusiness, accountBusiness>();

builder.Services.AddTransient<IcategoriesRepository, categoriesRopository>();
builder.Services.AddTransient<IcategoriesBusiness, categoriesBusiness>();

builder.Services.AddTransient<IchapterRepository, chapterRepository>();
builder.Services.AddTransient<IchapterBusiness, chapterBusiness>();

IConfiguration configuration = builder.Configuration;
var appSettingsSection = configuration.GetSection("AppSettings");

builder.Services.AddControllers();
// Learn more about configuring Swagger/OpenAPI at https://aka.ms/aspnetcore/swashbuckle
builder.Services.AddEndpointsApiExplorer();
builder.Services.AddSwaggerGen();

var app = builder.Build();

// Configure the HTTP request pipeline.
if (app.Environment.IsDevelopment())
{
    app.UseSwagger();
    app.UseSwaggerUI();
}
app.UseCors("AllowAll");

app.UseHttpsRedirection();

app.UseAuthorization();

app.MapControllers();

app.Run();


